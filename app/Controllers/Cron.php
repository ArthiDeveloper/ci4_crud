<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Cron extends BaseController
{
    public function reminder()
    {
        // Load customer model
        $this->userModel  = new UserModel();

        // Fetch customers whose licenses are expiring in 10 or 5 days
        $tenDaysLater = Time::now()->addDays(10)->toDateString();
        $fiveDaysLater = Time::now()->addDays(5)->toDateString();

        $expiringCustomers = $this->userModel->whereIn('license_expiry_date', [$tenDaysLater, $fiveDaysLater])->findAll();

        if (!empty($expiringCustomers)) {
            foreach ($expiringCustomers as $customer) {
                // Prepare email details
                $daysLeft = (new Time($customer['license_expiry_date']))->difference(Time::now())->getDays();
                $this->sendEmail($customer['email'], $daysLeft);
            }
        }
    }

    private function sendEmail($email, $daysLeft)
    {
        $emailService = \Config\Services::email();

        $emailService->setTo($email);
        $emailService->setFrom('your-email@example.com', 'Your Company Name');
        $emailService->setSubject("License Expiry Notification");

        // Customize the email message based on days left
        $message = "Dear Customer, your license is set to expire in {$daysLeft} days. Please renew it soon to avoid interruptions.";

        $emailService->setMessage($message);

        if ($emailService->send()) {
            echo "Notification sent to {$email}\n";
        } else {
            echo "Failed to send notification to {$email}\n";
            log_message('error', $emailService->printDebugger(['headers']));
        }
    }

}
