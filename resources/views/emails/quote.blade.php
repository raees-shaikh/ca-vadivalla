@component('mail::message')
    - **Details**:
    - **Full Name / Company Name**: {{ $data->name }}
    - **Phone no.**: {{ $data->phone }}
    - **Email**: {{ $data->email }}
    - **Message**: {{ $data->message }}
@endcomponent
