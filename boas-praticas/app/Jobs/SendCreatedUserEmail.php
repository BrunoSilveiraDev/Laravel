<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendCreatedUserEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void ...
     */
    public function handle()
    {
        // envio de email #endregion
        Mail::send([], [], function($message){
            $message->to('brunosilvcarv@gmail.com')
            ->subject("{$this->user->name} foi cadastrado no sistema")
            ->setBody('Um novo usuário foi criado no sistema!');
        });
    }
}
