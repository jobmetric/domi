# Changelog

## 1.14.1

- Use PackageCore's `EnumMacros` trait for Domi enums and require PackageCore 1.20 or later.
- Explicitly mark optional string parameters as nullable in the service and helpers to support PHP 8.4+ without implicit-nullability deprecations.
- Keep facade method annotations consistent with the nullable signatures. Existing calls with omitted arguments or explicit `null` remain supported.
