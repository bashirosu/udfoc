

@if($students->isNotEmpty())
    @foreach ($students as $student)
        <div class="post-list">
            <p>{{ $student->last_name }}</p>
            <p>{{ $student->first_name }}</p>
            <p>{{ $student->group }}</p>
            <p>{{ $student->profile->address }}</p>
              <p>{{ $student->profile->country }}</p>
           
    @endforeach



  
    @foreach ($records as $record)
    <div class="post-list">
        <p>{{ $record->exams_type }}</p>
        <p>{{ $record->id }}</p>
        @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
