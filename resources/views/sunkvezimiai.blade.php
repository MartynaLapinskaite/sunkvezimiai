<!DOCTYPE html>
<body>
<a href="store">Pridėti naują sunkvežimį</a>
<table>
    <tr>
        <th>@sortablelink('marke', 'Markė')</th>
        <th>@sortablelink('gamybos_metai', 'Gamybos metai')</th>
        <th>@sortablelink('savininko_vardas_pavarde', 'Savininko vardas pavardė')</th>
        <th>@sortablelink('savininku_skaicius', 'Savininkų skaičius')</th>
        <th>Komentarai</th>
    </tr>
    @foreach($sunkvezimiai as $sunkvezimis)
        <tr>
            <td>{{$sunkvezimis->marke}}</td>
            <td>{{$sunkvezimis->gamybos_metai}}</td>
            <td>{{$sunkvezimis->savininko_vardas_pavarde}}</td>
            <td>{{$sunkvezimis->savininku_skaicius}}</td>
            <td>{{$sunkvezimis->komentarai}}</td>
        </tr>
    @endforeach
    <form action="{{ route('filtravimas') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <tr>
            <td><select data-column="0" name="marke" class="form-control filter-select">
                    <option value="">------</option>
                    <option value="Volvo">Volvo</option>
                    <option value="VAZ">VAZ</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="GAZ">GAZ</option>
                </select></td>
            <td>
                <select data-column="1" name="gamybos_metai" class="form-control filter-select">
                    <option value="">------</option>
                    @foreach($metai as $m)
                        <option value={{$m}}>{{$m}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <select data-column="2" name="savininko_vardas_pavarde" class="form-control filter-select">
                    <option value="">------</option>
                    @foreach($savininkai as $savininkas)
                            <option value="{{$savininkas}}">{{$savininkas}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <select data-column="3" name="savininku_skaicius" class="form-control filter-select">
                    <option value="">------</option>
                    @foreach($skaiciai as $skaicius)
                        <option value={{$skaicius}}>{{$skaicius}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <button type="submit">Filtruoti</button>
            </td>
        </tr>
    </form>
</table>
</body>
</html>
