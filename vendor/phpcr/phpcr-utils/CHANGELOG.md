Changelog
=========

1.1.0
-----

Cleanups and adjustments, particularly on the command handling.

1.1.0-RC1
---------

* **2014-01-08**: Lots of bugfixes and cleanups. Improved CLI commands. If you
  are using the cli-config.php, compare your file with cli-config.php.dist.

* 2013-12-28**: PathHelper::getNodeName validates the path and throws an
  exception if it is not given a valid path with slashes in it.

1.0.0
-----

* **2013-06-15**: [Command] Added `--apply-closure` option to `phpcr:nodes:update` command.
