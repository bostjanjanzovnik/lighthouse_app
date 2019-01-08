<?php

namespace App\Http\GraphQL\Mutations;

use App\Http\GraphQL\Scalars\AccessToken;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class UserLogin
{
    /**
     * Return a value for the field.
     *
     * @param null $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param array $args The arguments that were passed into the field.
     * @param GraphQLContext|null $context Arbitrary data that is shared between all fields of a single query.
     * @param ResolveInfo $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     *
     * @return mixed
     */
    public function resolve($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {
        if ($token = auth()->attempt(['email' => $args['email'], 'password' => $args['password']])) {
            $accessToken = new AccessToken();
            $accessToken->access_token = $token;
            $accessToken->token_type = 'bearer';
            $accessToken->expires_in = auth()->factory()->getTTL() * 60;

            return $accessToken;
        }

        return null;
    }
}
