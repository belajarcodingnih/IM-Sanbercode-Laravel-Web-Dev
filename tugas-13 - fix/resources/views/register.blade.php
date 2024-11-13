    @extends('layouts.master')
    @section('judul')
    Halaman Pendaftaran
    @endsection
    @section('content')
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <div>
            <div>
                <label>Firts Name:</label><br><br>
                <input type="text" name="first_name" placeholder="Your first name"><br><br>
            </div>
            <div>
                <label>Last Name:</label><br><br>
                <input type="text" name="last_name" placeholder="Your last name"><br><br>
            </div>
        <div>

        <div>
            <label for="">Gender:</label><br><br>
            <input type="radio" name="gender" id="">Male<br>
            <input type="radio" name="gender" id="">Female<br>
            <input type="radio" name="gender" id="">Other<br>
        </div><br><br>           
        
        </div>
            <label>Nasionality:</label><br><br>
            <select name="">
                <option value="bahasa indonesia">Bahasa Indonesia</option>
                <option value="english">English</option>
                <option value="Other">Other</option>
            </select>
        </div><br>

        <div>
            <label>Language Spoken:</label><br><br>
            <input type="checkbox" name="gender" id="">Bahasa Indonesia<br>
            <input type="checkbox" name="gender" id="">English<br>
            <input type="checkbox" name="gender" id="">Other<br>
        </div>

        <div>
            <p>Bio:</p>
            <textarea name="message" cols="30" rows="10"></textarea><br>
            <button type="submit">Submit</button>
        </div>
    </form>
   
    @endsection
    