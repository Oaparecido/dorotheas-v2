<div class="modal fade" id="modal_register-course" tabindex="-1" aria-labelledby="modal_register-courseLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <img src="{!! asset('assets/icon_freiras.svg') !!}" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="register-course" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="register-course" action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <label for="" class="d-flex flex-column">
                        Nome
                        <input required name="name" id="name" type="text" placeholder="Digite aqui">
                    </label>
                    <label for="" class="d-flex flex-column">
                        Dias do curso
                        <div class="dropdown-course d-flex align-items-center">
                            <a href="#" data-toggle="dropdown">Selecione aqui</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" value="{{true}}" {{ old('weekday_monday') ? 'checked="checked"' : '' }} name="weekday_monday" id="weekday_monday"> Segunda
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" value="{{true}}" {{ old('weekday_tuesday') ? 'checked="checked"' : '' }} name="weekday_tuesday" id="weekday_tuesday"> Terça
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" value="{{true}}" {{ old('weekday_wednesday') ? 'checked="checked"' : '' }} name="weekday_wednesday" id="weekday_wednesday"> Quarta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" value="{{true}}" {{ old('weekday_thursday') ? 'checked="checked"' : '' }} name="weekday_thursday" id="weekday_thursday"> Quinta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" value="{{true}}" {{ old('weekday_friday') ? 'checked="checked"' : '' }} name="weekday_friday" id="weekday_friday"> Sexta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" value="{{true}}" {{ old('weekday_saturday') ? 'checked="checked"' : '' }} name="weekday_saturday" id="weekday_saturday"> Sábado
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </label>

                    <div class="d-flex justify-content-between mt-5">
                        <label class="d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center">
                                <input class="radio" value="{{ true }}" type="radio" name="time_morning" id="time_morning">
                                <img src="{!! asset("assets/icon_morning.svg") !!}" alt="">
                            </div>
                            <p>Manhã</p>
                        </label>

                        <label class="d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center">
                                <input class="radio" value="{{ true }}" type="radio" name="time_afternoon" id="time_afternoon">
                                <img src="{!! asset("assets/icon_afternoon.svg") !!}" alt="">
                            </div>
                            <p>Tarde</p>
                        </label>

                        <label class="d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center">
                                <input class="radio" value="{{ true }}" type="radio" name="time_night" id="time_night">
                                <img src="{!! asset("assets/icon_night.svg") !!}" alt="">
                            </div>
                            <p>Noite</p>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <button class="confirm" type="submit">
                            Confirmar
                        </button>
                    </div>
                </form>
                @include('components/messages')
            </div>
        </div>
    </div>
</div>
