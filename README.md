Demo for downgrade to php 5.6 for

```php
(clone $this)->execute()
```

Step to reproduce:

```bash
composer install
vendor/bin/rector
```

Expected:

Need to apply change to:

```diff
-        (clone $this)->execute();
+        $object = clone $this;
+        $object->execute();
```