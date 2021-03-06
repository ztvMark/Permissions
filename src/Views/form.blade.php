<div class="uk-container uk-container-large">
    <div uk-grid>
        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
        <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
            <div class="uk-card uk-card-default">
                <div class="uk-card-header">
                    {{ $title }}
                </div>
                <div class="uk-card-body">
                    <form method="POST" action="{{ $action }}" class="uk-form-stacked">
                        {{ csrf_field() }}
                        @if(isset($method)) {{ method_field($method) }} @endif
                        <fieldset class="uk-fieldset">
                            <div class="uk-margin">
                                <label class="uk-form-label">@lang('laralum_permissions::general.name')</label>
                                <input value="{{ old('name', isset($permission) ? $permission->name : '') }}" name="name" class="uk-input" type="text" placeholder="@lang('laralum_permissions::general.name')">
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">@lang('laralum_permissions::general.slug')</label>
                                <input value="{{ old('slug', isset($permission) ? $permission->slug : '') }}" name="slug" class="uk-input" type="text" placeholder="@lang('laralum_permissions::general.slug')">
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">@lang('laralum_permissions::general.description')</label>
                                <div class="uk-form-controls">
                                    <textarea name="description" class="uk-textarea" rows="5" placeholder="@lang('laralum_permissions::general.description')">{{ old('description', isset($permission) ? $permission->description : '') }}</textarea>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <a href="{{ $cancel }}" class="uk-button uk-button-default">@lang('laralum_permissions::general.cancel')</a>
                                <button type="submit" class="uk-button uk-button-primary uk-align-right">
                                    <span class="ion-forward"></span>&nbsp; {{ $button }}
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
    </div>
</div>
