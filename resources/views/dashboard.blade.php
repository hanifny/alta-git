<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 d-flex align-items-center justify-content-center">
                    <!-- You're logged in! -->
                    <div>
                        {{$text}} Update Lagii
                        <img src={{asset($image)}} class="rounded w-25 border border-success">
                    </div>
                    <div>
                        <form action="/import" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="importData" class="mb-4 text-success">𒀱 Import Data</label>
                            <input name="fileExcel" type="file" class="form-control mb-2" id="importData">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                        <!-- <hr class="my-4">
                        <form action="/import-kepegawaian" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="importData2" class="mb-4 text-success">𒀱 Import Kepegawaian</label>
                            <input name="fileExcel" type="file" class="form-control mb-2" id="importData2">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form> -->
                    </div>
                    <!-- <div id='calendar'></div> -->
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     var calendarEl = document.getElementById('calendar');

        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //         initialView: 'dayGridMonth',
        //         initialDate: '2021-02-07',
        //         headerToolbar: {
        //             left: 'prev,next today',
        //             center: 'title',
        //             right: 'dayGridMonth,timeGridWeek,timeGridDay'
        //         },
        //         eventDidMount: function (info) {
        //             var tooltip = new Tooltip(info.el, {
        //                 title: info.event.extendedProps.description,
        //                 placement: 'top',
        //                 trigger: 'hover',
        //                 container: 'body'
        //             });
        //         },
        //         events: [{
        //                 title: 'All Day Event',
        //                 start: '2021-02-01',
        //                 description: 'description for All Day Event',
        //             },
        //             {
        //                 title: 'Long Event',
        //                 start: '2021-02-07',
        //                 end: '2021-02-10'
        //             },
        //             {
        //                 groupId: '999',
        //                 title: 'Repeating Event',
        //                 start: '2021-02-09T16:00:00'
        //             },
        //             {
        //                 groupId: '999',
        //                 title: 'Repeating Event',
        //                 start: '2021-02-16T16:00:00'
        //             },
        //             {
        //                 title: 'Conference',
        //                 start: '2021-02-11',
        //                 end: '2021-02-13'
        //             },
        //             {
        //                 title: 'Meeting',
        //                 start: '2021-02-12T10:30:00',
        //                 end: '2021-02-12T12:30:00'
        //             },
        //             {
        //                 title: 'Lunch',
        //                 start: '2021-02-12T12:00:00'
        //             },
        //             {
        //                 title: 'Meeting',
        //                 start: '2021-02-12T14:30:00'
        //             },
        //             {
        //                 title: 'Birthday Party',
        //                 start: '2021-02-13T07:00:00'
        //             },
        //             {
        //                 title: 'Click for Google',
        //                 url: 'http://google.com/',
        //                 start: '2021-02-28'
        //             }
        //         ]
        //     });

        //     calendar.render();
        // });
    </script>
    @endpush
</x-app-layout>