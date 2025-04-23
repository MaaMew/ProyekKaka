<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak</title>
</head>
<body>

    <h2>Form Kontak</h2>

    {{-- Menampilkan pesan sukses --}}
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Menampilkan daftar error validasi --}}
    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- Form Input Kontak --}}
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"><br><br>

        <label>Pesan:</label><br>
        <textarea name="message" placeholder="Tulis pesan Anda...">{{ old('message') }}</textarea><br><br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
