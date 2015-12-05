<div id="wrapper" @if (Session::get('sideBarToggle')) class="toggled" @endif >
{{--*/ $notes =Auth::User()->unreadNotes();  /*--}}
    <!-- Sidebar -->
<div id="sidebar-wrapper" style="z-index:10000;">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#menu-toggle" id="menu-toggle">Quick Notes</a><span class="glyphicon glyphicon-chevron-left sidebar-right" onclick="do_toggle();"></span>
        </li>
        @foreach ( $notes as $note)
            <li id="{{$note->id}}">
                <a href="#" onclick="return false;">{{$note->note}}</a>
                <span class="glyphicon glyphicon-eye-open" style="color:#5bc0de"onclick="viewNote({{$note->id}})"></span>
                <span class="glyphicon glyphicon-ok" style="color:#5cb85c" onclick="completeNote({{$note->id}})"></span>
            </li>
        @endforeach
    </ul>
    <div class="container-fluid pull-bottom">
        <div class="row">
        {!! Form::open(['url' => 'postDailyNote']) !!}
            <div class="col-lg-12 col-md-12">
                <div class="form-group input-group-md">
                    {!! Form::Hidden('currentPage', Request::path()) !!}
                    {!! Form::Label('note', 'Note:') !!}
                    {!! Form::TextArea('note', null, ['class' => 'form-control', 'rows'=>'5']) !!}
                    {!! Form::Hidden('_token',  csrf_token() ) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="form-group input-group-xs">{!! Form::submit('Create Note',['class' => 'btn btn-primary form-control']) !!}</div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div onclick="do_toggle();" class="@if ($notes->count() > 0)side-bar-button-active @else side-bar-button-inactive @endif side-bar-button"><div id="numberedToggle" style="display:inline-block">{!!$notes->count()!!}</div><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>


<!-- /#sidebar-wrapper -->

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $.post("/ajax/toggleSideBar", {"toggled": "1"});
    });
    function do_toggle(){
        $('#wrapper').toggleClass('toggled');
        $.post('/ajax/toggleSideBar', {
            _token: "{{csrf_token()}}"
        } );
    };

    function completeNote(id){
        $.get('/ajax/completeNote/'+id);
        document.getElementById(id).style.display = 'none';
        var currentNumber = document.getElementById('numberedToggle').innerHTML;
        currentNumber = Number(currentNumber)-1;
        document.getElementById('numberedToggle').innerHTML = currentNumber;
    };

    function viewNote(id){
        $.get('/ajax/viewNote/'+id);
        document.getElementById(id).style.display = 'none';
        var currentNumber = document.getElementById('numberedToggle').innerHTML;
        currentNumber = Number(currentNumber)-1;
        document.getElementById('numberedToggle').innerHTML = currentNumber;
    };
</script>