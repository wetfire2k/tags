<?php

/*
 * Part of the Tags package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Tags
 * @version    10.0.1
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2020, Cartalyst LLC
 * @link       https://cartalyst.com
 */

namespace Cartalyst\Tags;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

interface TaggableInterface
{
    /**
     * Returns the tags delimiter.
     *
     * @return string
     */
    public static function getTagsDelimiter(): string;

    /**
     * Sets the tags delimiter.
     *
     * @param string $delimiter
     *
     * @return void
     */
    public static function setTagsDelimiter(string $delimiter): void;

    /**
     * Returns the Eloquent tags model name.
     *
     * @return string
     */
    public static function getTagsModel(): string;

    /**
     * Sets the Eloquent tags model name.
     *
     * @param string $model
     *
     * @return void
     */
    public static function setTagsModel(string $model): void;

    /**
     * Returns the slug generator.
     *
     * @return \Closure|string
     */
    public static function getSlugGenerator();

    /**
     * Sets the slug generator.
     *
     * @param \Closure|string $name
     *
     * @return void
     */
    public static function setSlugGenerator($name): void;

    /**
     * Returns the entity Eloquent tag model object.
     * @param  string  $lang
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags(): MorphToMany;

    /**
     * Returns all the tags under the entity namespace.    
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function allTags(): Builder;

    /**
     * Returns the entities with only the given tags.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string|array  $tags    
     * @param  string  $type
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array|string                          $tags
     * @param string                                $type
     *
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeWhereTag(Builder $query, $tags, string $type = 'slug'): Builder;

    /**
     * Returns the entities with one of the given tags.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array|string                          $tags
     * @param string                                $type
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeWithTag(Builder $query, $tags, string $type = 'slug'): Builder;

    /**
     * Returns the entities that do not have one of the given tags.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string|array  $tags    
     * @param  string  $type
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array|string                          $tags
     * @param string                                $type
     *
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeWithoutTag(Builder $query, $tags, string $type = 'slug'): Builder;

    /**
     * Attaches multiple tags to the entity.
     *
<<<<<<< HEAD
     * @param  string|array  $tags
     * @param  string  $lang
     * @return bool
     */
    public function tag($tags, $lang = null);
=======
     * @param array|string $tags
     *
     * @return bool
     */
    public function tag($tags): bool;
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d

    /**
     * Detaches multiple tags from the entity or if no tags are
     * passed, removes all the attached tags from the entity.
     *
<<<<<<< HEAD
     * @param  string|array|null  $tags
     * @param  string  $lang
     * @return bool
     */
    public function untag($tags = null, $lang = null);
=======
     * @param array|string|null $tags
     *
     * @return bool
     */
    public function untag($tags = null): bool;
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d

    /**
     * Attaches or detaches the given tags.
     *
<<<<<<< HEAD
     * @param  string|array  $tags
     * @param  string  $lang
     * @param  string  $type
     * @return bool
     */
    public function setTags($tags, $lang = null, $type = 'name');
=======
     * @param array|string $tags
     * @param string       $type
     *
     * @return bool
     */
    public function setTags($tags, string $type = 'name'): bool;
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d

    /**
     * Attaches the given tag to the entity.
     *
<<<<<<< HEAD
     * @param  string  $name
     * @param  string  $lang
     * @return void
     */
    public function addTag($name, $lang = null);
=======
     * @param string $name
     *
     * @return void
     */
    public function addTag(string $name): void;
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d

    /**
     * Detaches the given tag from the entity.
     *
<<<<<<< HEAD
     * @param  string  $name
     * @param  string  $lang
     * @return void
     */
    public function removeTag($name, $lang = null);
=======
     * @param string $name
     *
     * @return void
     */
    public function removeTag(string $name): void;
>>>>>>> 27b4f07b1abc72ad57507a0c52eba370caf5973d

    /**
     * Prepares the given tags before being saved.
     *
     * @param array|string $tags
     *
     * @return array
     */
    public function prepareTags($tags): array;

    /**
     * Creates a new model instance.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function createTagsModel(): Model;
}
