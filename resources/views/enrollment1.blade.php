<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Enrollment Form</h1>
    <form action="{{Route('enrollmentPost1')}}" method="POST" id="enrollmentForm">
        @csrf
        @method('post')
        <!-- First Part -->
        <div class="form-set" id="balikAralInfo"  style="display: block;">
            <label for="balikAral">Balik aral ba ag batang ipapalista?</label><br>
            <input type="radio" id="balikAralNo" name="aralStatus" value="0">
            <label for="balikAralNo">HINDI</label><br>
            <input type="radio" id="balikAralYes" name="aralStatus" value="1">
            <label for="balikAralYes">OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon.</label><br>
            <button type="submit">Next</button>
        </div>
    </form>
</body>
</html>