@php($record_counter = 0)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Style -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @if ( isset( $countries ) and isset( $records_to_show ) and isset( $lower_population )
            and isset( $order_by ) and isset( $order ) )
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Pais</th>
                        <th scope="col" class="px-6 py-3">Capital</th>
                        <th scope="col" class="px-6 py-3">Moneda</th>
                        <th scope="col" class="px-6 py-3">Población</th>
                        <th scope="col" class="px-6 py-3">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country => $info)

                        @if ($record_counter < $records_to_show)
                            @if ($info['population'] <= $lower_population)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    @if (str_contains($country, '_'))
                                        <td class="px-6 py-4">{{ ucfirst(implode(' ', explode('_', $country))) }}</td>
                                    @else
                                        <td class="px-6 py-4">{{ ucfirst($country) }}</td>
                                    @endif
                                    <td class="px-6 py-4">{{ ucfirst($info['capital']) }}</td>
                                    <td class="px-6 py-4">{{ $info['currency'] }}</td>
                                    <td class="px-6 py-4">{{ $info['population'] }}</td>
                                    <td class="px-6 py-4">{{ $info['description'] }}</td>
                                </tr>
                                @php($record_counter++)
                            @else
                                @continue
                            @endif
                        @else
                            @break
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</body>
</html>