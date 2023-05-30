<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BienvenidoEmail extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hola, ' .$this->user->nombre)
                    ->line('Nos complace darte la bienvenida al emocionante mundo de aprendizaje y 
                    diversión matemática con DiscalWeb, aqui descubrirás un conjunto de juegos 
                    interesantes especialmente diseñados para ayudarte a fortalecer tus habilidades 
                    matemáticas mientras te sumerges en un universo lleno de colores vibrantes, 
                    personajes amigables y desafíos estimulantes ')
                    ->action('Ir a la DiscalWeb', url('/'))
                    ->line('¡Gracias por ser parte de nuestra comunidad!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
