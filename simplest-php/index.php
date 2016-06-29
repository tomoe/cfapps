<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello world</title>
    </head>
    <body>
          <p><?php echo "Hello from PHP"; ?></p>
          <p><?php echo "CF_INSTANCE_GUID: " . getenv('CF_INSTANCE_GUID'); ?></p>
          <p><?php echo "CF_INSTANCE_ADDR: " . getenv('CF_INSTANCE_ADDR'); ?></p>
          <p><?php echo "CF_INSTANCE_INDEX: " . getenv('CF_INSTANCE_INDEX'); ?></p>
    </body>
</html>
