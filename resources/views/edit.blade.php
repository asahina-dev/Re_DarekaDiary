@extends('template.header')
@section('title', '自分が書かなければおそらく誰かが書く日記')
<style>
.form {
    font-size: 100%;
    text-align: center;
    width: 100%;
    margin: 1.5em;
}
.form>p {
    font-size: 250%;
    font-weight: bold;
}
button {
    /**/
}
#entry {
    text-align: left;
    width: 100%;
    height: 40%;
}
.links {
    text-align: right;
}
.links>a {
    padding: 0 0.5em;
}
.submit {
    margin-top: 0.5em;
}
</style>
@section('content')
<div class="form">
    <p>{{ $date }}</p>
    <form action="/entry" method="get">
        <textarea name="entry" id="entry" cols="30" rows="10"></textarea>
        <div class="links submit">
            <button type="submit">記録</button>
        </div>
    </form>
</div>
@endsection