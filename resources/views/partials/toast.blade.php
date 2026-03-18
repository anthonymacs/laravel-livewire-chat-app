{{-- Static session toast (for regular redirects) --}}
@if (session('success') || session('error'))
<div id="toast" ...> {{-- your existing toast code --}} </div>
@endif

{{-- Livewire event toast --}}
<div id="livewire-toast"
     class="fixed top-6 right-6 z-50 flex items-center gap-3 bg-white text-gray-800 text-sm font-medium px-5 py-4 rounded-2xl shadow-xl border border-gray-100"
     style="min-width:300px; opacity:0; transform:translateX(100%); transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);">
    <div id="livewire-toast-icon" class="w-9 h-9 rounded-xl flex items-center justify-center shrink-0"></div>
    <div class="flex-1">
        <p id="livewire-toast-title" class="font-semibold text-gray-900 text-sm"></p>
        <p id="livewire-toast-message" class="text-xs text-gray-500 mt-0.5"></p>
    </div>
    <button onclick="dismissLivewireToast()" class="text-gray-300 hover:text-gray-500 transition ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
    <div id="livewire-toast-progress"
         class="absolute bottom-0 left-0 h-1 rounded-b-2xl"
         style="width:100%; transition: width 3s linear;">
    </div>
</div>

<script>
    let toastTimer;

    document.addEventListener('livewire:init', () => {
        Livewire.on('toast', ({ type, message }) => {
            const toast     = document.getElementById('livewire-toast');
            const icon      = document.getElementById('livewire-toast-icon');
            const title     = document.getElementById('livewire-toast-title');
            const msg       = document.getElementById('livewire-toast-message');
            const progress  = document.getElementById('livewire-toast-progress');

            const isSuccess = type === 'success';

            icon.className = `w-9 h-9 rounded-xl flex items-center justify-center shrink-0 ${isSuccess ? 'bg-green-100' : 'bg-red-100'}`;
            icon.innerHTML = isSuccess
                ? `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`
                : `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;

            title.textContent    = isSuccess ? 'Success!' : 'Error!';
            msg.textContent      = message;
            progress.className   = `absolute bottom-0 left-0 h-1 rounded-b-2xl ${isSuccess ? 'bg-green-400' : 'bg-red-400'}`;
            progress.style.width = '100%';

            toast.style.opacity   = '1';
            toast.style.transform = 'translateX(0)';

            clearTimeout(toastTimer);
            setTimeout(() => { progress.style.width = '0%'; }, 100);
            toastTimer = setTimeout(() => dismissLivewireToast(), 3200);
        });
    });

    function dismissLivewireToast() {
        const toast = document.getElementById('livewire-toast');
        toast.style.opacity   = '0';
        toast.style.transform = 'translateX(110%)';
    }
</script>