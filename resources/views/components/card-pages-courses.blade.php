<div class="pages-course-card d-flex flex-column align-items-center m-4">
    <img src="{{ asset('assets/icon_card_ballet.svg') }}" alt="icon course ballet in card">
    <h1>{{$course['name']}}</h1>
    <h3>Professor Course</h3>
    <div class="pages-course-card-info d-flex justify-content-around">
        <div class="d-flex flex-column align-items-center">
            <div class="yellow">
                <img src="{{ asset('assets/icon_students.svg') }}" alt="">
            </div>
            <p class="mostard-yellow">23</p>
        </div>
        <div class="d-flex flex-column align-items-center">
            @if($course['time_morning'])
                <div class="red">
                    <img src="{{ asset('assets/icon_morning.svg') }}" alt="">
                </div>
                <P class="fire-opal">manhã</P>
            @elseif($course['time_afternoon'])
                <div class="red">
                    <img src="{{ asset('assets/icon_afternoon.svg') }}" alt="">
                </div>
                <P class="fire-opal">tarde</P>
            @elseif($course['time_night'])
                <div class="red">
                    <img src="{{ asset('assets/icon_night.svg') }}" alt="">
                </div>
                <P class="fire-opal">noite</P>
            @else
                <div class="red">
                    <img src="{{ asset('assets/icon_clock.svg') }}" alt="">
                </div>
                <p class="fire-opal">turno</p>
            @endif
        </div>
    </div>
    <div class="pages-course-card-footer d-flex justify-content-center">
        <a href="">
            Adicionar aluno
        </a>
    </div>
</div>
