@component('mail::message')
    - **Details**:
    - **Name**: {{ $data->name }}
    - **Email**: {{ $data->email }}
    - **Company**: {{ $data->company }}
    - **Message**: {{ $data->message }}
@endcomponent
