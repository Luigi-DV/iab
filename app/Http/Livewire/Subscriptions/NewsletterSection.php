<?php

namespace App\Http\Livewire\Subscriptions;

use Livewire\Component;
use Newsletter;


class NewsletterSection extends Component
{
    public string $subscriptionEmail = '';

    protected $rules = [
        'subscriptionEmail' => 'required|email',
    ];

    protected $validationAttributes = [
        'subscriptionEmail' => 'email'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function subscribe()
    {
        $validatedData = $this->validate();
        $email = $validatedData['subscriptionEmail'];
        //Subscribing the user
        $this->checkAndSubscribe($email);
    }

    private function checkAndSubscribe($email)
    {
        if(Newsletter::isSubscribed($email))
        {
            $errorSubscribedMessage = __('You have already subscribed to our newsletter.');
            session()->flash('errorSubscribed', $errorSubscribedMessage);
        }elseif(!Newsletter::isSubscribed($email))
        {
            Newsletter::subscribe($email);
            //Check if user is correctly subscribed
            $this->checkSubscription($email);
        }
    }

    private function checkSubscription($email)
    {
        if(Newsletter::isSubscribed($email))
        {
            $subscribedMessage = __('You have been correctly subscribed.');
            session()->flash('subscribed', $subscribedMessage);
        }else{
            $errorSubscribedMessage = __('Error while subscribing.');
            session()->flash('errorSubscribed', $errorSubscribedMessage);
        }
    }

    public function render()
    {
        return view('livewire.subscriptions.newsletter-section');
    }
}
