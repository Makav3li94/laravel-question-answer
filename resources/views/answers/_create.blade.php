<div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>
                            <h3>Your Answer</h3>
                        </h2>
                        <hr>
                        <form action="{{route('questions.answers.store',$question->id)}}" method="post">

                            @csrf
                            <div class='form-group'>
                                <textarea name="body" {{$errors->has('body') ? 'is-invalid' : ''}} class='form-control'  rows="10"></textarea>
                                @if($errors->has('body'))
                                    <div class='invalid-feedback'>
                                        <strong>{{$errors->first('body')}}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class='form-group'>
                                <button type='submit' class='btn btn-lg btn-outline-primary'>Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>