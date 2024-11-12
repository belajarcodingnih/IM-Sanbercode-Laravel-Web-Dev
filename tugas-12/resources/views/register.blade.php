<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form html by Muhamad Regi</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
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
</body>
</html>