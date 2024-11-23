<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Log Out') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('After logging out, your data will still be saved. But to access it you will have to login again to the same account.') }}
        </p>
    </header>

    <x-secondary-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-logout')"
    >{{ __('Log Out') }}</x-secondary-button>

    <x-modal name="confirm-user-logout" focusable>
        <form method="post" action="{{ route('logout') }}" class="p-6">
            @csrf

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to log out of your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once you log out, you will have to login again to access your data. Are you sure you want to log out?') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Log Out') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</section>
