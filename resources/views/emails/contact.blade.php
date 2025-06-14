@component('mail::message')
    - **Details**:
    - **Name**: {{ $data->name }}
    - **Company Name**: {{ $data->company_name }}
    - **Phone no.**: {{ $data->phone }}
    - **Email**: {{ $data->email }}
    - **Message**: {{ $data->message }}
@endcomponent
