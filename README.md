# php-7-some-news
## Testing some news features of PHP 7.0 and 7.1 with symfony

### \Throwable
    \Error and \Exception are both implement \Throwable
### Specify weekmode or strictmode
    `
        <?php
        // The first line of the file (before namespace)
        declare('strict_types' = 1)
    `
### NullableType (7.1)
    `
        public function test(?string $val) : ?string
        {
            // ...
        }
    `
### Void (7.1)
    `
        public function test(?string $val) : void
        {
            // no return
        }
    ` 
### private constant
    `
        class A 
        {
            private const A_PRIVATE_CONSTANT = 'HELLO'
        }
    `

### Iterable type
