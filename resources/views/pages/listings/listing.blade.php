<h3>User</h3>

@if(!empty($listing))
    <ul>
        <li> {{$listing['title']}}</li>
        <li> {{$listing['tags']}}</li>
        <li> {{$listing['company']}}</li>
        <li> {{$listing['location']}}</li>
        <li> {{$listing['email']}}</li>
        <li> {{$listing['website']}}</li>
        <li> {{$listing['description']}}</li>
    </ul>
@else
    <p>No data to show</p>
@endif
