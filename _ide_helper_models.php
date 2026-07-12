<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $title1
 * @property string $title2
 * @property array<array-key, mixed> $description
 * @property string|null $logo
 * @property string|null $background_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereBackgroundImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|About whereUpdatedAt($value)
 */
	class About extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $subject
 * @property string $message
 * @property bool $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ContactMessage whereUpdatedAt($value)
 */
	class ContactMessage extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $service_id
 * @property string|null $title_line1
 * @property string|null $title_line2
 * @property array<array-key, mixed> $description
 * @property string|null $bg_image
 * @property int $order
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereBgImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereTitleLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereTitleLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DetailedService whereUpdatedAt($value)
 */
	class DetailedService extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $image
 * @property array<array-key, mixed>|null $caption
 * @property int $order
 * @property string|null $category
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GalleryItem whereUpdatedAt($value)
 */
	class GalleryItem extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title1
 * @property string $title2
 * @property array<array-key, mixed> $subtitle
 * @property array<array-key, mixed> $cta_primary
 * @property array<array-key, mixed> $background_images
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereBackgroundImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereCtaPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hero whereUpdatedAt($value)
 */
	class Hero extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $service_id
 * @property string $title
 * @property array<array-key, mixed> $description
 * @property string $thumbnail
 * @property string|null $url
 * @property int $year
 * @property bool $is_featured
 * @property int $order
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereYear($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $image
 * @property string|null $color
 * @property string $col
 * @property int $order
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DetailedService|null $detailedService
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SiteSetting whereValue($value)
 */
	class SiteSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $username
 * @property string|null $surname
 * @property array<array-key, mixed> $role
 * @property array<array-key, mixed>|null $description1
 * @property array<array-key, mixed>|null $description2
 * @property array<array-key, mixed>|null $skills
 * @property array<array-key, mixed>|null $focus
 * @property string|null $tools
 * @property array<array-key, mixed>|null $style
 * @property string|null $photo
 * @property string|null $background_image
 * @property string|null $instagram_url
 * @property string|null $email
 * @property string|null $github_url
 * @property string|null $linkedin_url
 * @property int $order
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereBackgroundImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereDescription1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereDescription2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereGithubUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereInstagramUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereLinkedinUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereTools($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TeamMember whereUsername($value)
 */
	class TeamMember extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $client_name
 * @property array<array-key, mixed> $content
 * @property int $rating
 * @property bool $is_active
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereClientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimonial whereUpdatedAt($value)
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

