@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.subject.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.subjects.update", [$subject->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.subject.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $subject->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.subject.fields.department') }}</label>
                <select class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department" id="department" required>
                    <option value disabled {{ old('department', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Subject::DEPARTMENT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('department', $subject->department) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <div class="invalid-feedback">
                        {{ $errors->first('department') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.subject.fields.purpose') }}</label>
                <select class="form-control {{ $errors->has('purpose') ? 'is-invalid' : '' }}" name="purpose" id="purpose">
                    <option value disabled {{ old('purpose', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Subject::PURPOSE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('purpose', $subject->purpose) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('purpose'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purpose') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.purpose_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.subject.fields.category') }}</label>
                <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category" id="category" required>
                    <option value disabled {{ old('category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Subject::CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('category', $subject->category) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_it_urgent">{{ trans('cruds.subject.fields.is_it_urgent') }}</label>
                <input class="form-control {{ $errors->has('is_it_urgent') ? 'is-invalid' : '' }}" type="text" name="is_it_urgent" id="is_it_urgent" value="{{ old('is_it_urgent', $subject->is_it_urgent) }}">
                @if($errors->has('is_it_urgent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_urgent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_urgent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.subject.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $subject->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_board_powers') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_board_powers" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_board_powers" id="is_it_board_powers" value="1" {{ $subject->is_it_board_powers || old('is_it_board_powers', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_board_powers">{{ trans('cruds.subject.fields.is_it_board_powers') }}</label>
                </div>
                @if($errors->has('is_it_board_powers'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_board_powers') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_board_powers_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_it_board_powers_text">{{ trans('cruds.subject.fields.is_it_board_powers_text') }}</label>
                <input class="form-control {{ $errors->has('is_it_board_powers_text') ? 'is-invalid' : '' }}" type="text" name="is_it_board_powers_text" id="is_it_board_powers_text" value="{{ old('is_it_board_powers_text', $subject->is_it_board_powers_text) }}">
                @if($errors->has('is_it_board_powers_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_board_powers_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_board_powers_text_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_related') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_related" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_related" id="is_it_related" value="1" {{ $subject->is_it_related || old('is_it_related', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_related">{{ trans('cruds.subject.fields.is_it_related') }}</label>
                </div>
                @if($errors->has('is_it_related'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_related') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_related_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_financial_related') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_financial_related" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_financial_related" id="is_it_financial_related" value="1" {{ $subject->is_it_financial_related || old('is_it_financial_related', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_financial_related">{{ trans('cruds.subject.fields.is_it_financial_related') }}</label>
                </div>
                @if($errors->has('is_it_financial_related'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_financial_related') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_financial_related_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_market_effect') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_market_effect" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_market_effect" id="is_it_market_effect" value="1" {{ $subject->is_it_market_effect || old('is_it_market_effect', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_market_effect">{{ trans('cruds.subject.fields.is_it_market_effect') }}</label>
                </div>
                @if($errors->has('is_it_market_effect'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_market_effect') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_market_effect_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_edit_related') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_edit_related" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_edit_related" id="is_it_edit_related" value="1" {{ $subject->is_it_edit_related || old('is_it_edit_related', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_edit_related">{{ trans('cruds.subject.fields.is_it_edit_related') }}</label>
                </div>
                @if($errors->has('is_it_edit_related'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_edit_related') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_edit_related_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_decision_related') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_decision_related" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_decision_related" id="is_it_decision_related" value="1" {{ $subject->is_it_decision_related || old('is_it_decision_related', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_decision_related">{{ trans('cruds.subject.fields.is_it_decision_related') }}</label>
                </div>
                @if($errors->has('is_it_decision_related'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_decision_related') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_decision_related_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_public') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_public" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_public" id="is_it_public" value="1" {{ $subject->is_it_public || old('is_it_public', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_public">{{ trans('cruds.subject.fields.is_it_public') }}</label>
                </div>
                @if($errors->has('is_it_public'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_public') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_public_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_related_to_old_subject') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_related_to_old_subject" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_related_to_old_subject" id="is_it_related_to_old_subject" value="1" {{ $subject->is_it_related_to_old_subject || old('is_it_related_to_old_subject', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_related_to_old_subject">{{ trans('cruds.subject.fields.is_it_related_to_old_subject') }}</label>
                </div>
                @if($errors->has('is_it_related_to_old_subject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_related_to_old_subject') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_related_to_old_subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time">{{ trans('cruds.subject.fields.time') }}</label>
                <input class="form-control {{ $errors->has('time') ? 'is-invalid' : '' }}" type="number" name="time" id="time" value="{{ old('time', $subject->time) }}" step="1">
                @if($errors->has('time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.time_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_it_department_related') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_it_department_related" value="0">
                    <input class="form-check-input" type="checkbox" name="is_it_department_related" id="is_it_department_related" value="1" {{ $subject->is_it_department_related || old('is_it_department_related', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_it_department_related">{{ trans('cruds.subject.fields.is_it_department_related') }}</label>
                </div>
                @if($errors->has('is_it_department_related'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_it_department_related') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.is_it_department_related_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.subject.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Subject::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $subject->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subject.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection