@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group mb-3">

    <x-form.input label="Category Name" class="form-control-lg" role="input" name="name" type="text"
        :value="$category->name" />
</div>
<div class="form-group mb-3">
    <label for="parent_id">Parent Category</label>
    <select name="parent_id" id="parent_id" class="form-control">
        <option value="">No Parent Category</option>
        @foreach ($parents as $parent)
            <option value="{{ $parent->id }} " @selected(old('parent_id', $category->parent_id) == $parent->id)>
                {{ $parent->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group mb-3">
    <label for="description">Description</label>
    <x-form.textarea name="description" id="description" rows="3" :value="$category->description"/>
</div>

<div class="form-group mb-3">
    <x-form.label for="image">Image{{-- $slot --}}</x-form.label>
    <x-form.input  type="file" name="image" id="image" accept="image/*"/>
    @if($category->image)
        <img src="{{asset('storage/' . $category->image)}}" alt="" width="50" height="50">
    @endif
</div>
<div class="form-group mb-3">
    <label for="status">Status</label>
    <x-form.radio name="status" :potions="['active'=>'Active','archived'=>'Archived']" :checked="$category->status"/>
</div>
<div class="form-group">

    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'Create' }}</button>

    <a href="{{ route('dashpoard.categories.index') }}" class="btn btn-secondary ms-2-pinary">Cancel</a>
</div>