@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Welcome back,')

@section('content')

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-6">

        {{-- Total Messages --}}
        <div class="bg-white/70 backdrop-blur-md rounded-2xl p-5 border border-white shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-11 h-11 bg-indigo-50 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-green-500 bg-green-50 px-2 py-1 rounded-full">↑ 12%</span>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">1,284</p>
            <p class="text-xs text-gray-400 mt-1">Total Messages</p>
        </div>

        {{-- Contacts --}}
        <div class="bg-white/70 backdrop-blur-md rounded-2xl p-5 border border-white shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-11 h-11 bg-purple-50 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-purple-500 bg-purple-50 px-2 py-1 rounded-full">+3 new</span>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">48</p>
            <p class="text-xs text-gray-400 mt-1">Contacts</p>
        </div>

        {{-- Online Now --}}
        <div class="bg-white/70 backdrop-blur-md rounded-2xl p-5 border border-white shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-11 h-11 bg-green-50 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="flex items-center gap-1 text-xs font-semibold text-green-500 bg-green-50 px-2 py-1 rounded-full">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> Live
                </span>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">12</p>
            <p class="text-xs text-gray-400 mt-1">Online Now</p>
        </div>

        {{-- Unread Alerts --}}
        <div class="bg-white/70 backdrop-blur-md rounded-2xl p-5 border border-white shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="w-11 h-11 bg-red-50 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-red-500 bg-red-50 px-2 py-1 rounded-full">Urgent</span>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">5</p>
            <p class="text-xs text-gray-400 mt-1">Unread Alerts</p>
        </div>

    </div>

    {{-- Main Grid --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        {{-- Recent Messages --}}
        <div class="xl:col-span-2 bg-white/70 backdrop-blur-md rounded-2xl border border-white shadow-sm p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-sm font-bold text-gray-900">Recent Messages</h2>
                <a href="#" class="text-xs text-indigo-600 font-semibold hover:underline">View all</a>
            </div>
            <div class="space-y-2">
                @foreach ([
                    ['name' => 'Sarah Lee',   'msg' => 'Hey, are you available for a quick call?', 'time' => '2m ago',  'color' => '6366f1', 'online' => true,  'unread' => true],
                    ['name' => 'Mark Chen',   'msg' => 'I sent you the files. Let me know!',        'time' => '15m ago', 'color' => '8b5cf6', 'online' => true,  'unread' => true],
                    ['name' => 'Priya Nair',  'msg' => 'The meeting is rescheduled to 3PM.',        'time' => '1h ago',  'color' => '10b981', 'online' => false, 'unread' => false],
                    ['name' => 'John Smith',  'msg' => 'Thanks for your help earlier 🙏',           'time' => '3h ago',  'color' => 'f59e0b', 'online' => false, 'unread' => false],
                    ['name' => 'Anna Kim',    'msg' => 'Can you review the design files?',          'time' => '5h ago',  'color' => 'ec4899', 'online' => true,  'unread' => false],
                ] as $msg)
                <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-indigo-50/50 transition cursor-pointer group">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($msg['name']) }}&background={{ $msg['color'] }}&color=fff"
                             class="w-10 h-10 rounded-full" alt="">
                        @if($msg['online'])
                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-400 border-2 border-white rounded-full"></span>
                        @endif
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-gray-800">{{ $msg['name'] }}</p>
                        <p class="text-xs text-gray-400 truncate">{{ $msg['msg'] }}</p>
                    </div>
                    <div class="flex flex-col items-end gap-1.5 shrink-0">
                        <span class="text-xs text-gray-300">{{ $msg['time'] }}</span>
                        @if($msg['unread'])
                            <span class="w-2 h-2 bg-indigo-500 rounded-full"></span>
                        @else
                            <span class="w-2 h-2 rounded-full"></span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Right Column --}}
        <div class="flex flex-col gap-6">

            {{-- Online Contacts --}}
            <div class="bg-white/70 backdrop-blur-md rounded-2xl border border-white shadow-sm p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-sm font-bold text-gray-900">Online Now</h2>
                    <span class="text-xs bg-green-100 text-green-600 font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> 12 active
                    </span>
                </div>
                <div class="space-y-3">
                    @foreach ([
                        ['name' => 'Anna Kim',   'role' => 'Designer',   'color' => 'ec4899'],
                        ['name' => 'Tom Brown',  'role' => 'Developer',  'color' => '3b82f6'],
                        ['name' => 'Lisa Park',  'role' => 'Manager',    'color' => 'f59e0b'],
                        ['name' => 'Jake Tan',   'role' => 'Marketing',  'color' => '10b981'],
                    ] as $contact)
                    <div class="flex items-center gap-3 p-2 rounded-xl hover:bg-indigo-50/50 transition cursor-pointer">
                        <div class="relative shrink-0">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($contact['name']) }}&background={{ $contact['color'] }}&color=fff"
                                 class="w-9 h-9 rounded-full" alt="">
                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-400 border-2 border-white rounded-full"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-800">{{ $contact['name'] }}</p>
                            <p class="text-xs text-gray-400">{{ $contact['role'] }}</p>
                        </div>
                        <button class="text-xs bg-indigo-50 text-indigo-600 font-semibold px-3 py-1 rounded-lg hover:bg-indigo-100 transition shrink-0">
                            Chat
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Quick Stats --}}
            <div class="bg-white/70 backdrop-blur-md rounded-2xl border border-white shadow-sm p-6">
                <h2 class="text-sm font-bold text-gray-900 mb-4">This Week</h2>
                <div class="space-y-3">
                    <div>
                        <div class="flex justify-between text-xs text-gray-500 mb-1">
                            <span>Messages Sent</span>
                            <span class="font-semibold text-gray-700">284 / 500</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-indigo-500 h-2 rounded-full" style="width: 57%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-500 mb-1">
                            <span>New Contacts</span>
                            <span class="font-semibold text-gray-700">3 / 10</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-500 mb-1">
                            <span>Response Rate</span>
                            <span class="font-semibold text-gray-700">92%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection