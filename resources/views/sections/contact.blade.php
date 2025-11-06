@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h2 class="text-3xl font-bold mb-8 text-center">Contact Me</h2>

@if(session('success'))
    <div class="max-w-lg mx-auto mb-6 p-4 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('contact.send') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow space-y-4">
    @csrf
    <div>
        <label class="block mb-1">Name</label>
        <input type="text" name="name" class="w-full border border-gray-300 rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block mb-1">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block mb-1">Subject</label>
        <input type="text" name="subject" class="w-full border border-gray-300 rounded px-3 py-2">
    </div>
    <div>
        <label class="block mb-1">Message</label>
        <textarea name="message" rows="5" class="w-full border border-gray-300 rounded px-3 py-2" required></textarea>
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Send Message</button>
</form>

@if(!empty($messages))
    <h3 class="text-2xl font-bold mt-12 mb-4 text-center">Previous Messages</h3>
    <div class="max-w-lg mx-auto space-y-4">
        @foreach($messages as $msg)
            <div class="p-4 border rounded shadow">
                <p><strong>{{ $msg->name }}</strong> ({{ $msg->email }})</p>
                @if($msg->subject)<p><em>{{ $msg->subject }}</em></p>@endif
                <p>{{ $msg->message }}</p>
            </div>
        @endforeach
    </div>
@endif
@endsection
