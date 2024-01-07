<!-- livewire/villager-component.blade.php -->

<div>
    <ul class="billing-ul">
        <li class="billing-li">
            <label>District</label>
            <select wire:model.live="selectedDistrict" name="kecamatan">
                <option value="" selected>Pilih Kecamatan</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </li>
    </ul>
    @if (!is_null($selectedDistrict))
    <ul class="billing-ul">
        <li class="billing-li">
            <label>Villager</label>
            <select name="kelurahan">
                <option value="" disabled selected>Pilih Kelurahan</option>
                    @foreach ($villages['villages'] as $village)
                        <option value="{{ $village->id }}">{{ $village ->name }}</option>
                    @endforeach
            </select>
        </li>
    </ul>
    @endif
</div>
