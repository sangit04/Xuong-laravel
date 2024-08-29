<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class ChatPrivate implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $gui;
    public $nhan;
    public $message;


    public function __construct(User $gui,User $nhan, $message)
    {
        $this->gui = $gui;
        $this->nhan = $nhan;
        $this->message = $message;
    }
    public function broadcastOn()
    {
        return new PrivateChannel('chat.private.' . $this->gui->id . '.' . $this->nhan->id);
    }
}
