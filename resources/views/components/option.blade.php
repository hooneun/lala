<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <select>
        @foreach ($options as $option)
            <option value="{{ $option }}" {{ $isSelected($option) ? 'selected="selected"' : ''}} >{{ $option }}</option>
        @endforeach
    </select>
</div>
