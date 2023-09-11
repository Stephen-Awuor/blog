@extends('includes.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dear {{auth()->user()->firstname}}, Please fill the form to submit your article.</div>

                <div class="card-body">
                  <form method="POST" action="/new_article">
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                          <input type="text" id="title" class="form-control form-control-lg" name="title" value="{{old('title')}}"/>
                          @if($errors->has('title'))
        <div class="text-danger">{{ $errors->first('title') }}</div>
    @endif
                          <label class="form-label" for="form4Example1">Article Title</label>
                        </div>
                      
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input type="text" id="tags" class="form-control form-control-lg" name="tags" value="{{old('tags')}}"/>
                          @if($errors->has('tags'))
        <div class="text-danger">{{ $errors->first('tags') }}</div>
    @endif
                          <label class="form-label" for="form4Example2">Tags</label>
                        </div>
                      
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                          <textarea class="form-control" id="form4Example3" rows="4" value="{{old('article')}}"></textarea>
                          @if($errors->has('article'))
        <div class="text-danger">{{ $errors->first('article') }}</div>
    @endif
                          <label class="form-label" for="form4Example3">Artile</label>
                        </div>

                        <label class="form-label" for="customFile">Upload a file</label>
                        <input type="file" class="form-control" id="customFile" />&nbsp;
                      
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" />
                          <label class="form-check-label" for="form4Example4">
                            Agree to terms and conditions.
                          </label>
                        </div>
                      
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
