<?php

namespace App\Mail;

use App\Models\BookedHotelRoom;
use App\Models\BookedProgram;
use App\Models\BookedTransportation;
use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyAdmin extends Mailable
{
    use Queueable, SerializesModels;

    private $Type;
    private $ID;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $type)
    {
        $this->Type = $type;
        $this->ID = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->Type == 'HotelRoom'){
            $BookedHotelRoom = BookedHotelRoom::with('hotelRoom')->with('hotelRoom.hotel')->where('id', $this->ID)->first();
            return $this->view('mail.notify.hotelRoom', ["BookedHotelRoom"=>$BookedHotelRoom]);
        }elseif ($this->Type == 'Transportation') {
            $BookedTransportation = BookedTransportation::with('transportation.locationFrom')->with('transportation.locationTo')->where('id', $this->ID)->first();
            return $this->view('mail.notify.transportation', ["BookedTransportation"=>$BookedTransportation]);
        }elseif ($this->Type == 'Program') {
            $BookedProgram = BookedProgram::with('program')->where('id', $this->ID)->first();
            return $this->view('mail.notify.program', ["BookedProgram"=>$BookedProgram]);
        }else{
            $ContactMessage = ContactMessage::where('id', $this->ID)->first();
            return $this->view('mail.notify.contact', ["ContactMessage"=>$ContactMessage]);
        }
    }
}
