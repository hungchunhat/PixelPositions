<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl mb-3">Let's Find Your Next Job</h1>
            <form action="" class="mb-3 flex items-center w-full max-w-lg bg-white/5 rounded-xl px-3 py-3 mx-auto">
                <input type="text"
                       class="flex-1 focus:outline-none bg-transparent border-white/10"
                       placeholder="Web developer..."/>
                <button type="button" class="w-3 h-3 bg-white"></button>
            </form>
        </section>
        <x-section-heading>Featured Jobs</x-section-heading>
        <section>
            <div class="grid lg:grid-cols-3 gap-8">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-5">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>
    </div>
</x-layout>

