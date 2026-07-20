@extends('admin.layouts.app')

@section('pageTitle','FAQ Create')

@section('content')

<div class="main-content">

    <div class="row">
        <div class="col-md-12">
            <div class="float-left">
                <h2>FAQ Create</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-success mb-2">
                    Back
                </a>
            </div>
        </div>
    </div>

    <form class="form-group"
          action="{{ route('admin.faqs.store') }}"
          method="POST">

        @csrf

        <div class="row">
            <div class="col-md-12">

                {{-- Question --}}
                <div class="form-label-group mb-3">
                    <input type="text"
                           name="question"
                           class="form-control"
                           placeholder="Question"
                           value="{{ old('question') }}"
                           >
                           
                    <label>Question</label>
                    @error('question')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>

                {{-- Answer --}}
                <div class="form-label-group mb-3">
                    <textarea name="answer"
                              id="answer"
                              class="form-control"
                              rows="6"
                              placeholder="Answer">{{ old('answer') }}</textarea>
                              @error('answer')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>

                {{-- Schema --}}
                <div class="form-label-group mb-3">
                    <textarea name="schema"
                              class="form-control"
                              rows="6"
                              placeholder="Schema JSON">{{ old('schema') }}</textarea>
                </div>

                {{-- Is SPC --}}
                <div class="mb-3">
                    <label>
                        <input type="checkbox"
                               name="is_spc"
                               value="1">
                        Is SPC FAQ
                    </label>
                </div>

                {{-- Is Quartz --}}
                <div class="mb-3">
                    <label>
                        <input type="checkbox"
                               name="is_quartz"
                               value="1">
                        Is Quartz FAQ
                    </label>
                </div>

                <div class="text-center form-action">
                    <button type="submit"
                            class="btn btn-primary text-uppercase">
                        Submit
                    </button>
                </div>

            </div>
        </div>

    </form>

</div>

@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#answer'))
    .catch(error => {
        console.error(error);
    });
</script>

@endsection