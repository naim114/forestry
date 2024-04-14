@extends('layouts.app')

@section('page-title', 'Trees Perha')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Trees Perha
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>5-15</th>
                        <th>15-30</th>
                        <th>30-45</th>
                        <th>45-60</th>
                        <th>60+</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>5-15</th>
                        <th>15-30</th>
                        <th>30-45</th>
                        <th>45-60</th>
                        <th>60+</th>
                        <th>Total</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Group 1</td>
                        <td>mersawa</td>
                        <td>15</td>
                        <td>12</td>
                        <td>4</td>
                        <td>2</td>
                        <td>2</td>
                        <td>44</td>
                    </tr>
                    <tr>
                        <td>Group 2</td>
                        <td>keruing</td>
                        <td>21</td>
                        <td>18</td>
                        <td>6</td>
                        <td>4</td>
                        <td>4</td>
                        <td>53</td>
                    </tr>
                    <tr>
                        <td>Group 3</td>
                        <td>Dip commercial</td>
                        <td>21</td>
                        <td>18</td>
                        <td>6</td>
                        <td>4</td>
                        <td>4</td>
                        <td>53</td>
                    </tr>
                    <tr>
                        <td>Group 4</td>
                        <td>Dip Non Commercial</td>
                        <td>30</td>
                        <td>27</td>
                        <td>9</td>
                        <td>5</td>
                        <td>3</td>
                        <td>74</td>
                    </tr>
                    <tr>
                        <td>Group 5</td>
                        <td>NonDip Commercial</td>
                        <td>30</td>
                        <td>27</td>
                        <td>9</td>
                        <td>4</td>
                        <td>4</td>
                        <td>74</td>
                    </tr>
                    <tr>
                        <td>Group 6</td>
                        <td>NonDip Non Commercial</td>
                        <td>39</td>
                        <td>36</td>
                        <td>12</td>
                        <td>7</td>
                        <td>4</td>
                        <td>98</td>
                    </tr>
                    <tr>
                        <td>Group 7</td>
                        <td>Others</td>
                        <td>44</td>
                        <td>42</td>
                        <td>14</td>
                        <td>9</td>
                        <td>4</td>
                        <td>113</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>200</td>
                        <td>180</td>
                        <td>60</td>
                        <td>35</td>
                        <td>25</td>
                        <td>500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
