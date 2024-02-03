<x-app-layout>
    <div class="p-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-8 text-gray-900 dark:text-gray-100">
                    @php
                        foreach ($data as $id => $user) {
                        }
                    @endphp
                    {{-- <div class="avatar av-l"
                     style="background-image: url('{{ Chatify::getUserWithAvatar($user->avatar) }}');">
                    </div> --}}
                    <b class="w-20"> {{ "Name: " }} </b>
					<i> {{ $user -> name }} </i>
                    <br>
					<b class="w-20"> {{ "Email: " }} </b>
					<i> {{ $user -> email }} </i>
					<br>
					<b class="w-20"> {{ "Massage send: " }} </b>
					<i> {{ DB::table('ch_messages')->where('from_id', $user->id)->count(); }} </i>
					<br>
					<b class="w-20"> {{ "Massage receive: " }} </b>
					<i> {{ DB::table('ch_messages')->where('to_id', $user->id)->count(); }} </i>
					<br>
					<b class="w-20"> {{ "Massage send to you: " }} </b>
					<i> {{ DB::table('ch_messages')->where([
                        ['to_id', $user->id],
                        ['from_id', Auth::user()->id]
                    ])->count(); }} </i>
                    <br>
                    <a href="
                    @php
                        echo '/chatify/' . $user ->id;
                    @endphp
                    " class="mt-4"> {{ "Chat with user" }} </a>
				</div>
            </div>
        </div>
    </div>
</x-app-layout>
