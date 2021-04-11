@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.subject.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subjects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.id') }}
                        </th>
                        <td>
                            {{ $subject->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.title') }}
                        </th>
                        <td>
                            {{ $subject->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.department') }}
                        </th>
                        <td>
                            {{ App\Models\Subject::DEPARTMENT_SELECT[$subject->department] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.purpose') }}
                        </th>
                        <td>
                            {{ App\Models\Subject::PURPOSE_SELECT[$subject->purpose] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.category') }}
                        </th>
                        <td>
                            {{ App\Models\Subject::CATEGORY_SELECT[$subject->category] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_urgent') }}
                        </th>
                        <td>
                            {{ $subject->is_it_urgent }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.description') }}
                        </th>
                        <td>
                            {{ $subject->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_board_powers') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_board_powers ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_board_powers_text') }}
                        </th>
                        <td>
                            {{ $subject->is_it_board_powers_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_related') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_related ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_financial_related') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_financial_related ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_market_effect') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_market_effect ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_edit_related') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_edit_related ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_decision_related') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_decision_related ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_public') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_public ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_related_to_old_subject') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_related_to_old_subject ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.time') }}
                        </th>
                        <td>
                            {{ $subject->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.is_it_department_related') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $subject->is_it_department_related ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subject.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Subject::STATUS_SELECT[$subject->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subjects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection