<?php

namespace App\Mail;

use App\ExpenseReport;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SumaryReport extends Mailable
{
    use Queueable, SerializesModels;

    private $expenseReport;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($expenseReport)
    {
        $this->expenseReport = $expenseReport;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.expenseReport', [
            'report' => $this->expenseReport
        ]);
    }
}
