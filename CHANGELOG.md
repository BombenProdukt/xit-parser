# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to
[Semantic Versioning](https://semver.org/spec/v2.0.0.html).

<a name="unreleased"></a>

## [Unreleased]


<a name="1.4.0"></a>

## [1.4.0] - 2023-07-08

### Changed

- Rename `Item/ItemDetails/Title` to `ItemStart/ItemContinuation/GroupTitle`
<a name="1.3.7"></a>

## [1.3.7] - 2023-07-08

### Fixed

- Replace `->` part of due date
<a name="1.3.6"></a>

## [1.3.6] - 2023-07-08

### Changed

- Rename `DocumentRenderer` to `TextRenderer`  ### Removed

- `Xit` helper class
<a name="1.3.4"></a>

## [1.3.4] - 2023-07-08

### Fixed

- Replacement of tags and due dates at the correct positions
<a name="1.3.3"></a>

## [1.3.3] - 2023-07-08

### Changed

- Match `Style` element implementation with other elements  ### Fixed

- Include item details (new lines) in current item
<a name="1.3.1"></a>

## [1.3.1] - 2023-07-08

### Fixed

- Render `content -> tags -> due` in that order
<a name="1.3.0"></a>

## [1.3.0] - 2023-07-08

### Added

- Renderer for Style HTML - Renderer for Class HTML - Renderer for Tailwind CSS - HTML elements that use `Tailwind CSS` classes - HTML elements that use the `class` attribute - HTML elements that use the `style` attribute
<a name="1.2.0"></a>

## [1.2.0] - 2023-07-08

### Changed

- Move characters and states into respective enums - Improve readability of document item creation process
<a name="1.1.0"></a>

## [1.1.0] - 2023-07-08

### Added

- Colors for document renderer  ### Changed

- Move Renderer into `Renderer` namespace - Move Parser into `Parser` namespace - Move DTOs into `Data` namespace - Merge all regular expressions into `RegularExpression` class
<a name="1.0.3"></a>

## [1.0.3] - 2023-07-08

### Fixed

- Namespace should be `Xit` instead of `XitParser`
<a name="1.0.1"></a>

## [1.0.1] - 2023-07-08


<a name="1.0.2"></a>

## [1.0.2] - 2023-07-08


<a name="1.0.0"></a>

## 1.0.0 - 2023-07-08

 [Unreleased]: https://github.com/faustbrian/package_slug/compare/1.4.0...HEAD [1.4.0]: https://github.com/faustbrian/package_slug/compare/1.3.7...1.4.0 [1.3.7]: https://github.com/faustbrian/package_slug/compare/1.3.6...1.3.7 [1.3.6]: https://github.com/faustbrian/package_slug/compare/1.3.4...1.3.6 [1.3.4]: https://github.com/faustbrian/package_slug/compare/1.3.3...1.3.4 [1.3.3]: https://github.com/faustbrian/package_slug/compare/1.3.1...1.3.3 [1.3.1]: https://github.com/faustbrian/package_slug/compare/1.3.0...1.3.1 [1.3.0]: https://github.com/faustbrian/package_slug/compare/1.2.0...1.3.0 [1.2.0]: https://github.com/faustbrian/package_slug/compare/1.1.0...1.2.0 [1.1.0]: https://github.com/faustbrian/package_slug/compare/1.0.3...1.1.0 [1.0.3]: https://github.com/faustbrian/package_slug/compare/1.0.1...1.0.3 [1.0.1]: https://github.com/faustbrian/package_slug/compare/1.0.2...1.0.1 [1.0.2]: https://github.com/faustbrian/package_slug/compare/1.0.0...1.0.2
