@component('mail::message')
<table cellspacing="0" cellpadding="4">
    <tbody>
    <tr><td>Name: </td><td>{{ $data['name'] }}</td></tr>
    <tr><td>Email: </td><td>{{ $data['email'] }}</td></tr>
    <tr><td>Message: </td><td>{{ $data['question'] }}</td></tr>
    </tbody>
</table><br>
<div style="display: block; text-align: left; padding-left:2px;"><a href="{{$data['answer_link']}}">Answer</a></div>

@endcomponent
