@extends('layouts.app')

@section('title', 'Modern CRM Dashboard')

@section('content')
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-[auto_1fr]">
        @include('partials.sidebar')
        @include('partials.header')
        <main class="flex-1 grid-pattern">
            @include('partials.leads')
            @include('partials.widgets')
        </main>
    </div>
    @include('partials.add-lead-modal')
@endsection

@push('scripts')
<script>
            // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const closeSidebar = document.getElementById('close-sidebar');
        
        mobileMenuToggle.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });
        
        closeSidebar.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
        
        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
        
        // Check for saved theme preference
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }
        
        // Add lead modal
        const addLeadBtn = document.getElementById('add-lead-btn');
        const addLeadModal = document.getElementById('add-lead-modal');
        const closeModal = document.getElementById('close-modal');
        
        addLeadBtn.addEventListener('click', () => {
            addLeadModal.classList.remove('hidden');
        });
        
        closeModal.addEventListener('click', () => {
            addLeadModal.classList.add('hidden');
        });
        
        // Close modal when clicking outside
        addLeadModal.addEventListener('click', (e) => {
            if (e.target === addLeadModal) {
                addLeadModal.classList.add('hidden');
            }
        });
        
        // Dropdown menu functionality
        document.querySelectorAll('.relative button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const dropdown = button.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });
        });
        
        // Close dropdowns when clicking elsewhere
        document.addEventListener('click', () => {
            document.querySelectorAll('.relative .hidden').forEach(dropdown => {
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            });
        });
</script>
@endpush
