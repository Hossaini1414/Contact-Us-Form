<x-mail::message>
    # Contact Us Message

    You have received a new contact form submission.

    ---

    **Name:** {{$data['name']}}

    **Email:** {{$data['email']}}

    **Message:**
    {{$data['message']}}

    ---

    <x-mail::button :url="'mailto:' . $data['email']">
        Reply to Sender
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>