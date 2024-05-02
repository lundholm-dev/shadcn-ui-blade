<button @class([
    'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50',

    'bg-destructive text-destructive-foreground hover:bg-destructive/90' => $variant == 'destructive',
    'border border-input bg-background hover:bg-accent hover:text-accent-foreground' => $variant == 'outline',
    'bg-secondary text-secondary-foreground hover:bg-secondary/80' => $variant == 'secondary',
    'hover:bg-accent hover:text-accent-foreground' => $variant == 'ghost',
    'text-slate underline-offset-4 hover:underline' => $variant == 'link',
    'bg-primary text-primary-foreground hover:bg-primary/90' => $variant == 'default',

    'h-9 rounded-md px-3' => $size == 'sm',
    'h-11 rounded-md px-8' => $size == 'lg',
    'h-10 w-10' => $size == 'icon',
    'h-10 px-4 py-2' => $size == 'default',
])>
    {{ $slot }}
</button>