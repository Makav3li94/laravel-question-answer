<div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>
                            {{$answersCount . " " . str_plural('Answer',$question->answers_count)}}

                        </h2>
                        <hr>
                        @include('layouts._messages')
                        @foreach($answers as $answer)
                        <div class="media">
                        <div class="d-flex flex-column vote-controls">
                            <a title="this question is userful" class="vote-up">
                               <i class='fa fa-caret-up fa-3x'></i>
                            </a>
                            <span class="votes-count">122</span>
                            <a title="This question is not useful" class="vote-down off">
                            <i class='fa fa-caret-down fa-3x'></i>
                            </a>
                            <a title="Mark this answer as best answer" class="vote-accepted mt-2 ">
                            <i class='fa fa-check fa-2x'></i>
                            
                            </a>
                            <span class="favorites-count">123</span>
                        </div>
                            <div class="media-body">
                                {!! $answer->body !!}
                                <div class="float-right  mt-4">
                                    <span class="text-muted">
                                        Answered {{$answer->created_date}}
                                    </span>
                                    <div class="media mt-2">
                                        <a href="{{$answer->user->url}}" class="pr-2">
                                            <img src="{{$answer->user->avatar}}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="{{$answer->user->url}}" class="pr-2">
                                                {{$answer->user->name}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>